<div id="doc-template">
    <h1>
        <em>6.</em> 
        <?php echo _("Committing"); ?>
    </h1>
    <div id="challenge-descroption">
        <p>
            <?php echo _("Notice how Git says changes to be committed? The 
            files listed here are in the Staging Area, and they are not in our 
            repository yet. We could add or remove files from the stage before 
            we store them in the repository."); ?>
        </p>
        <p>
            <?php echo _("To store our staged changes we run the commit command 
            with a message describing what we've changed. Let's do that now by 
            typing:"); ?>
        </p>
        <p>
            <code dir="ltr" class="input-command">
                git commit -m "Add octocat story"
            </code>
        </p>
    </div>
</div>
