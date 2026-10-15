set -euo pipefail

find . -path './.git' -prune -o -name '*.php' -type f -print0 | xargs -0 -n1 php -l
find assets/js -name '*.js' -type f -print0 | xargs -0 -n1 node --check

php -S 127.0.0.1:8765 -t . > /tmp/sb22-php.log 2>&1 &
server_pid=$!
trap 'kill "$server_pid" 2>/dev/null || true' EXIT
sleep 2

for url in \
    "/index.php" \
    "/pages/agence/agence.php" \
    "/pages/expertises/expertises.php" \
    "/pages/contact/contact.php" \
    "/pages/projets/projets.php" \
    "/pages/projets/detail.php?project=kuba-home" \
    "/pages/projets/detail.php?project=plumes-de-coeur" \
    "/pages/projets/detail.php?project=kid-fitness-lexy" \
    "/pages/projets/detail.php?project=plumes-de-coeur-publications" \
    "/pages/projets/detail.php?project=youplaboom-meta"
do
    status=$(curl -sS -o /tmp/sb22-body.html -w '%{http_code}' "http://127.0.0.1:8765$url")
    if [ "$status" != "200" ]; then
        cat /tmp/sb22-php.log
        echo "Falha HTTP $status em $url"
        exit 1
    fi
    if grep -Eiq 'Fatal error|Parse error|Warning:.* on line ' /tmp/sb22-body.html; then
        echo "Erro PHP em $url"
        exit 1
    fi
    if ! grep -q 'SB22' /tmp/sb22-body.html; then
        echo "Pagina sem identidade SB22 em $url"
        exit 1
    fi
done

status=$(curl -sS -o /tmp/sb22-notfound.html -w '%{http_code}' "http://127.0.0.1:8765/pages/projets/detail.php?project=nao-existe")
test "$status" = "404"

for image in \
    "assets/images/projects/kuba/kuba-instagram/kuba-instagram-01.jpg" \
    "assets/images/projects/plumes-de-coeur/plumes-1.jpg" \
    "assets/images/projects/plumes-de-coeur/plumes-2.jpg"
do
    test -f "$image"
done

echo "Verificações concluídas"
