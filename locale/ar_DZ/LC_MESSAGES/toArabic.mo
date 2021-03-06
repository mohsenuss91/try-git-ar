��          �      l      �     �     �               ,  
   @  �   K  �     r   �  �   6  %   �  �     y   �  �   C  h   6  �   �  �   �  �   8	  �   �	  f   f
  �  �
     �  &   �     �  $   �          2    A  �   H  �   �  �   �  2   s    �  \   �      P     L  c  �   �  �   O  �   	  �   �                                                   	                             
                  Adding & Committing Adding All Changes Adding Changes Checking for Changes Checking the Status Committing Git allows groups of people to work on the same documents (often code) at
            the same time, and without stepping on each other's toes. It's a distributed
            version control system. Good job! As Git just told us, our "octobox" 
            directory now has an empty repository in /.git/. The repository 
            is a hidden directory where Git operates. Good job! Git is now tracking our octocat.txt file. 
            Let's run git status again to see where we stand: Good, it looks like our Git repository is working 
            properly. Notice how Git says octocat.txt is "untracked"? That 
            means Git sees that octocat.txt is a new file. Got 15 minutes and want to learn Git? Great! You also can use wildcards if you want to add 
            many files of the same type. Notice that I've added a bunch of .txt
            files into your directory below. I created a file called octocat.txt in the octobox 
            repository for you (as you can see in the browser below). I put some in a directory named "octofamily" and 
            some others ended up in the root of our "octobox" directory. 
            Luckily, we can add all the new files using a wildcard with git 
            add. Don't forget the quotes! Next up, let's type the git status command to see 
            what the current state of our project is: Notice how Git says changes to be committed? The 
            files listed here are in the Staging Area, and they are not in our 
            repository yet. We could add or remove files from the stage before 
            we store them in the repository. Our terminal prompt below is currently in an <code>octobox</code> directory.
            To initialize a Git repository here, type the following command: To store our staged changes we run the commit command 
            with a message describing what we've changed. Let's do that now by 
            typing: To tell Git to start tracking changes made to 
            octocat.txt, we first need to add it to the staging area by using 
            git add. You should run the git status command again to see 
            how the repository status has changed: Project-Id-Version: try-git-ar
POT-Creation-Date: 2014-06-14 13:32-0000
PO-Revision-Date: 2014-06-14 15:52-0000
Last-Translator: 
Language-Team: Arabicgit-team <arabicgit@gmail.com>
Language: ar_DZ
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Generator: Poedit 1.5.4
X-Poedit-KeywordsList: _;gettext;gettext_noop
X-Poedit-Basepath: .
X-Poedit-SourceCharset: UTF-8
X-Poedit-SearchPath-0: ../../..
 الاضافة & الايداع اضافة جميع التغييرات اضافة التغييرات التحقق من التغييرات التحقق من الحالة الايداع Git يسمح لعدد من الاشخاص العمل على نفس المستند (في الغالب شيفرة مصدرية) في نفس الوقت, بدون الدوس على اصابعنا البعض. هو نظام موزع لتحكم في الاصدارات. عمل جيد, لقد اخبرنا Git بان مجلدنا "octobox" لديه مستودع فارغ في /git./ و محجوب حيث تسجل عمليات Git. عما جيد, الان Git يقوم بتتبع ملفنا <b> octocat.txt  </b>. لننفد الامر <b> git status </b> مرة اخرى لنرى اين وصلنا. جيد, يبدو ان مستودع Git الخاص بنا يعمل يصورة جيدة. لاحظ ان Git يقول بان <b> octocat.txt </b> غير متعقب و هدا يعني ان <b> octocat.txt </b> هو ملف جديد. لديك 15 دقيقة و تريد تعلم Git ؟ جيد جدا, يمكننك ايضا استخدام wildcards ادا اردت اضافة العديد من الملفات من نفس النوع. لاحظ اني اضفت العديد من الملفات النصية .txt في المجلد الخاص بنا انشأت ملف اسمه <b>octocat.txt </b> في المستودع octobox من اجلك.  وضعت القليل في مجلد اسمه "octofamily" و البقية في المجلد الجدر "octobox". نستطيع اضافة جميع الملفات باستخدام wildcard بالامر <b> git add </b>. ولا تنسى علامات الاقتباس ' ' وبعد, لنكتب الامر git status لمعرفة حالة المشروع. لاحظت كيف يخبرنا Git بان هناك تغييرات يجب ايداعها؟ وقائمة الملفات هنا هي في منطقة التحضير وليست في مستودعنا بعد وبهدا يمكننا اضافة او حدف ملفات من المنطقة قبل تخزينهم في منطقة التحضير. لدينا طرفية في الاسفل في المجلد<code> octobox </code>. لتهيئة مستودع لـ Git هنا. اكتب الامر التالي : لتخزين التغييرات بجب تنفيد الامر <b> commit </b> مع رسالة تصف التغييرات. لنقم بدلك الان بكتابة الامر التالي : لاخبار Git بتتبع التغيرات في <b> octocat.txt </b>, اولا يجب علينا اضافة الملف الى منطقة التحضير باستعمال الامر <b> git add </b> و الان يجب عليك تنفيد الامر <b> git status </b> مرة اخرى لترى بان حالة المستودع تغيرت. 