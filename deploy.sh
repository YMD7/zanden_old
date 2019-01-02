# SOURCE_FILESに書いてあるファイルをデプロイするスクリプト

#
# 注意
# - 使う前に、ソースパスとデプロイ先のパスを確認しましょう

# ソースパス（デプロイするファイルがあるディレクトリを指定）
SOURCE_PATH=/Users/kyo/Dev/zanden_old/SOURCE/PC/
# デプロイ先（サイトのルートパスを指定する）
DEPLOY_TO=/var/www/site/dev/zanden_test/

SOURCE_FILES=(
jp/wheretobuy.php
wheretobuy.php
)

echo -e "\n${DEPLOY_TO} へデプロイを実行\n"

for FILE in ${SOURCE_FILES[@]}; do

  # header.php がある場合はドメイン指定を書き換えてデプロイする
  if [ "$FILE" = "header.php" -o "$FILE" = "jp/header.php" ]; then
    echo -e "\nheader.php に指定のあるドメイン名を書き換えてデプロイします"

    TARGET_STR='<?php $domain = "http://localhost/"; ?>'
    REPLACE_STR='<?php $domain = "http://zanden_test.yamada.me/"; ?>'

    echo -e "  ${TARGET_STR}\n  -> ${REPLACE_STR}\n"

    # localhost を zanden_test.yamada.me に書き換え
    sed -i '' -e "s!${TARGET_STR}!${REPLACE_STR}!g" $SOURCE_PATH$FILE

    # 書き換えたやつをデプロイ
    echo "devVPS:$DEPLOY_TO$FILE"
    scp $SOURCE_PATH$FILE izumo:$DEPLOY_TO$FILE

    # ローカルのファイルを元に戻す
    sed -i '' -e "s!${REPLACE_STR}!${TARGET_STR}!g" $SOURCE_PATH$FILE
  else
    echo "devVPS:$DEPLOY_TO$FILE"
    scp $SOURCE_PATH$FILE izumo:$DEPLOY_TO$FILE
  fi
done
