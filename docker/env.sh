#!/bin/bash

# 切換到 evn.sh 檔案目錄底下
BASEDIR=$(dirname "$0")
cd "$BASEDIR"
clear

while :
do
    #
    echo "----------------------------------------"
    echo "選擇:"
    echo "----------------------------------------"
    echo "a. 開起 Docker 所有容器"
    echo "r. 重啟 Docker 所有容器"
    echo "c. 關閉 Docker 所有容器"
    echo "l. 顯示 Docker 所有容器"
    echo "q. Exit"
    echo "----------------------------------------"
    read -p "Input:" input input2

    clear

    case $input in
        a)
            docker-compose up -d
            ;;
        l)
            docker ps -a
            ;;
        c)
            docker rm -f $(docker ps -a -q) | awk '{print "移除 \""$1"\" Container"}'
            ;;
        mg)
            # 執行 migrate
            php ./../vendor/bin/phinx migrate
            ;;
        rb)
            # 執行 rollback
            php ./../vendor/bin/phinx rollback -t 0
            ;;
        *)
            # 離開程序
            exit
            ;;
    esac
done