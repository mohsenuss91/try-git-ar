<div id="doc-template">
    <h1>
        <em><?php echo (isset($_COOKIE['numOfChallenge'])) ? $_COOKIE['numOfChallenge'] : 1 ;  ?>.</em> 
        <?php echo _("Got 15 minutes and want to learn Git?"); ?>
    </h1>
    <div id="challenge-descroption">
        <p>
            <?php echo _("Git allows groups of people to work on the same documents (often code) at
            the same time, and without stepping on each other's toes. It's a distributed
            version control system."); ?>
        </p>
        <p>
            <?php echo _("Our terminal prompt below is currently in an <code>octobox</code> directory.
            To initialize a Git repository here, type the following command:"); ?>
        </p>
        <p>
            <code class="input-command">git init</code>
        </p>
    </div>
</div>
