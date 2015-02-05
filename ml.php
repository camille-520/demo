git 命令

切换目录
$ cd demo

创建库
$ mkdir demo

显示目录
$ pwd

将目录指定为库
$ git init

解除指定库
$ rm -rf .git

提交文件到库
$ git add

提交所有文件到库
$ git add.

提交文件说明
$ git commit -m "说明文字"

显示文件是否改动
$ git status

显示文件改动的内容和改动之前的内容
$ git diff

查看历史记录
$ git log

查看历史记录简化
$ git log --pretty=oneline

将当前版本退回至历史版本
$ git reset --hard HEAD^ //退回上一版本
$ git reset --hard HEAD^^ //退回上上一版本
$ git reset --hard HEAD~100 //退回上100个版本

退回指定版本
$ git reset --hard 02464d0

查看每一次命令
$ git reflog