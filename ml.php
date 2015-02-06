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
$ git add index.php

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

查看工作区和版本库里面最新版本的区别
$ git diff HEAD -- index.php

将工作区文件的最近一次修改或者删除全部撤销
$ git checkout -- index.php

把暂存区的修改撤销掉（unstage），重新放回工作区
$ git reset HEAD index.php

删除工作区文件
$ rm test.txt

删除版本库文件
$ git rm test.txt

恢复未删除版本库的文件
$ git checkout -- test.txt

在win电脑用户主目录创建SSH Key
$ ssh-keygen -t rsa -C "602392805@qq.com"

把本地仓库关联远程仓库
$ git remote add origin git@github.com:camille-520/demo.git

把本地仓库内容推送到远程仓库
仓库为空时使用-u
$ git push -u origin master
不为空时使用
$ git push origin master