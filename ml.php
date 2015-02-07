git 命令

切换目录
$ cd demo

查看目录内的文件
$ ls

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

显示文件是否改动/显示文件存在的冲突
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

克隆远程仓库到本地
$ git clone git@github.com:camille-520/gitskills.git


Git鼓励大量使用分支

创建新分支dev
$ git branch dev

切换到dev
$ git checkout dev

创建新分支dev,并切换到dev
$ git checkout -b dev

查看所有分支,当前分支前面会有*号
$ git branch

合并指定分支dev到当前分支
$ git merge dev

删除分支dev
$ git branch -d dev

查看分支合并图
$ git log --graph --pretty=oneline --abbrev-commit

强制禁用fast forward模式,git在merge时生成新的commit,用与查看历史分支
$ git merge --no-ff -m "merge with no-ff" dev

获取远程库
$ git pull origin web:web

存储工作现场
$ git stash

查看存储的工作
$ git stash list

恢复存储的工作并删除stash内容
$ git stash pop
or
$ git stash drop

恢复指定的存储工作stash@{0}
$ git stash apply stash@{0}

强行删除一个没合并的分支
$ git branch -D feature-vulcan

查看远程库信息
$ git remote

查看远程库详细信息
$ git remote -v

创建远程分支dev到本地
$ git checkout -b dev origin/dev

指定本地dev分支与远程origin/dev分支的链接,在pull,在push
$ git branch --set-upstream dev origin/dev

给分支创建标签
$ git tag v1.0

查看标签
$ git tag

忘记打标签就提交了,可以查看历史提交的commit记录
$ git log --pretty=oneline --abbrev-commit

然后给指定的commit id打标签
$ git tag v0.9 6222153

给指定commit id 创建带有说明的标签
$ git tag -a v0.2 -m "version 0.2" 6222153

查看标签说明文字
$ git show v0.2

还可以通过-s用私钥签名一个标签
$ git tag -s v0.2 -m "signed  version 0.2" fec156a

查看私钥标签说明
$ git show v0.2

删除标签
$ git tag -d v0.2

推送某个标签到远程
$ git push origin v0.2

一次性推送全部为推送的标签
$ git push origin --tags

删除远程标签,先删除本地
$ git tag -d v0.2
$ git push origin :refs/tags/v0.2

配置git 让文件名显示红色
$ git config --global color.ui true

*忽略某些文件时，需要在Git工作区的根目录下创建编写.gitignore
把需要忽略的文件名写进去.并将.gitignore提交到git

配置别名,例如:用st 表示status
$ git config --global alias.st status

配置显示最后一条提交信息的别名
$ git config --global alias.last 'log -1'

显示最后一条提交的信息
$ git last

删除别名:每个仓库的git的配置文件.git/config中[alias]后面
每个用户的git的配置文件放在用户主目录下的一个隐藏文件.gitconfig中