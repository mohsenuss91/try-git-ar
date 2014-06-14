<div id="doc-template">
    <h1>
        <em>7.</em> 
        <?php echo _("Adding All Changes"); ?>
    </h1>
    <div id="challenge-descroption">
        <p>
            <?php echo _("Great! You also can use wildcards if you want to add 
            many files of the same type. Notice that I've added a bunch of .txt
            files into your directory below."); ?>
        </p>
        <p>
            <?php echo _("I put some in a directory named \"octofamily\" and 
            some others ended up in the root of our \"octobox\" directory. 
            Luckily, we can add all the new files using a wildcard with git 
            add. Don't forget the quotes!"); ?>
        </p>
        <p>
            <code dir="ltr" class="input-command">
                git add '*.txt'
            </code>
        </p>
    </div>
</div>
