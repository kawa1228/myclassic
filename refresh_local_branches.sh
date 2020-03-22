#!/bin/bash

###############################################
#
# 最新をとってきてすぐに開発を再開できる Shell
#
# git status に変更なし
# git push master する対象がない
# 場合のみ
#
# git fetch をして他の人の変更を取得
# 不要なリモートに存在しないけどもローカルに存在している origin/XXX のブランチを削除
# master を checkout する
# merge済のローカルブランチを削除
# fileの状態を origin/master に合わせる
# 次の開発が始められる！
###############################################

# git status で現在のブランチに未コミット(Untracked, Uncommitted)のものがあるかを確認
RESULT_GIT_STATUS=$(git status -s)

if [ -n "$RESULT_GIT_STATUS" ]; then
    # プレーンな状態でないなら、処理を中止
    echo "Error: 変更途中の情報があるため、処理しません."
    echo $RESULT_GIT_STATUS
    exit 0;
fi

echo "変更途中の情報はありません"

# プレーンな状態なら、ブランチ整理処理を続行


# 既に削除されているリモートブランチで、ローカルに残っているブランチを掃除
git fetch --prune


RESULT_GIT_LOCAL_MASTER_IS_NEW=$(git rev-list --count origin/master..master)

if [ "$RESULT_GIT_LOCAL_MASTER_IS_NEW" -eq "1" ]; then
    # master がローカルにて最新コミットがある場合、処理を中止
    echo "Error: ローカルの master でPushできるコミットがあるため、処理しません."
    echo $RESULT_GIT_LOCAL_MASTER_IS_NEW
    exit 0;
fi



# master にチェックアウト
git checkout master

# master にマージ済のローカルブランチ削除(master, developの文字を含むブランチ以外)
git branch --merged master | grep -vE '^\*|master|develop' | xargs -I % git branch -d %

# master を origin/master に移動させ、ファイルも origin/master に合わせる
git reset origin/master --hard

# 次の開発ができるよ！
echo "もし、変更したコミットが見えなくなったら git reflog を使ってください"
echo "DONE. Go to the next step!"
