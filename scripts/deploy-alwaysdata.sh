#!/usr/bin/env bash
set -euo pipefail

REPOSITORY="/home/jaooooo/sb22-portfolio"
PUBLIC_ROOT="/home/jaooooo/www/sb22"
SOURCE="$REPOSITORY/maquettes/version-b"
BRANCH="stage/php-maquette-b-20261019"
STATE="/home/jaooooo/.sb22-deployed-revision"

if [[ ! -d "$REPOSITORY/.git" ]] || [[ ! -f "$SOURCE/index.php" ]]; then
    echo "SB22: repository or PHP source not found" >&2
    exit 1
fi

cd "$REPOSITORY"

if [[ "$(git branch --show-current)" != "$BRANCH" ]]; then
    echo "SB22: checkout is not on the designated deployment branch" >&2
    exit 1
fi

if ! git diff --quiet || ! git diff --cached --quiet; then
    echo "SB22: repository has local changes; refusing automatic update" >&2
    exit 1
fi

git fetch --quiet origin "refs/heads/$BRANCH"
git merge --ff-only FETCH_HEAD

REVISION="$(git rev-parse HEAD)"
if [[ -f "$STATE" ]] && [[ "$(cat "$STATE")" == "$REVISION" ]]; then
    echo "SB22: no changes ($REVISION)"
    exit 0
fi

mkdir -p "$PUBLIC_ROOT"
rsync -a --exclude='*.html' --exclude='_redirects' "$SOURCE/" "$PUBLIC_ROOT/"
echo "$REVISION" > "$STATE"
echo "SB22: deployed $REVISION to $PUBLIC_ROOT"
