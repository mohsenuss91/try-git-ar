<?php

/**
 * This class describe Git (commands,command results).
 *
 * @packaged default
 * @author Hachem Zerdia
 **/

class Git {
    
    // array of git commands.
    protected $gitCommands = NULL;
    // array of git flags. 
    protected $gitFlags = NULL;

    public function __construct() {
        $this->gitCommands = array(
            '1' => 'init',
            '2' => 'status',
            '3' => 'status',
            '4' => 'add',
            '5' => 'status',
            '6' => 'commit',
            '7' => 'add',
            '8' => 'commit',
            '9' => 'log',
            '10' => 'remote',
            '11' => 'push',
            '12' => 'pull',
            '13' => 'diff',
            '14' => 'add',
            '15' => 'diff',
            '16' => 'reset',
            '17' => 'checkout',
            '18' => 'branch',
            '19' => 'checkout',
            '20' => 'rm',
            '21' => 'commit',
            '22' => 'checkout',
            '23' => 'merge',
            '24' => 'branch',
            '25' => 'push'
        );

        $this->gitFlags = array(
            '1' => false,
            '2' => false,
            '3' => false,
            '4' => 'octocat.txt',
            '5' => false,
            '6' => '-m "Add octocat story"',
            '7' => '\'*.txt\'',
            '8' => '-m \'Add all the octocat txt files\'',
            '9' => false,
            '10' => 'add origin https://github.com/try-git/try-git.git',
            '11' => '-u origin master',
            '12' => 'origin master',
            '13' => 'HEAD',
            '14' => 'octofamily/octodog.txt',
            '15' => '--staged',
            '16' => 'octofamily/octodog.txt',
            '17' => '-- octocat.txt',
            '18' => 'clean_up',
            '19' => 'clean_up',
            '20' => '\'*.txt\'',
            '21' => '-m "Remove all the cats"',
            '22' => 'master',
            '23' => 'clean_up',
            '24' => '-d clean_up',
            '25' => false
        );
    }


    /**
     * This function exec when run "git init" command and 
     * retrun the result of this command.
     *
     * @param $numOfChallenge {int} Challenge number.
     * @return {string} result of command.
     * @author Hachem Zerdia
     **/
    public function init($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 1) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        Initialized empty Git repository in /.git/ <br />

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        } else {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        Reinitialized existing Git repository in /.git/ <br/>
                    </p>
                </div>  
            ';
        }

        return $message;
    }

    /**************************************************
    *  status command.
    **************************************************/
    public function status($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 2) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        # On branch master <br/>
                        # <br/>
                        # Initial commit <br/>
                        # <br/>
                        nothing to commit (create/copy files and use "git add" 
                        to track) <br/>

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        } elseif ($numOfChallenge == 3) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        # On branch master <br/>
                        # <br/>
                        # Initial commit <br/>
                        # <br/>
                        # Untracked files: <br/>
                        # (use "git add <file>..." 
                        to include in what will be committed) <br/>
                        # <br/>
                        #   <span style="color: #F00">octocat.txt</span> <br/>
                        nothing added to commit but untracked files present 
                        (use "git add" to track) <br/>

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        }elseif ($numOfChallenge == 5) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        # On branch master <br/>
                        # <br/>
                        # Initial commit <br/>
                        # <br/>
                        # Changes to be committed: <br/>
                        #   (use "git rm --cached <file>..." to unstage) <br/>
                        # <br/>
                        # <span style="color: #0F0;">new file:   octocat.txt
                        </span> <br/>
                        # <br/>
                    

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        }

        return $message;
    }

    /**************************************************
    *  add command.
    **************************************************/
    public function add($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 4) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        <span style="color:#0F0;">Nice job, you\'ve added 
                        octocat.txt to the Staging Area</span>
                    </p>
                </div>  
            ';
        } elseif ($numOfChallenge == 7 || $numOfChallenge == 14) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        }

        return $message;
    }

    /**************************************************
    *  commit command.
    **************************************************/
    public function commit($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 6) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        [master (root-commit) 20b5ccd] Add cute octocat story 
                        <br/>
                         1 file changed, 1 insertion(+) <br/>
                         create mode 100644 octocat.txt <br/>

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        } elseif ($numOfChallenge == 8) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        [master 3852b4d] Add all the octocat txt files <br/>
                         4 files changed, 4 insertions(+) <br/>
                         create mode 100644 blue_octocat.txt <br/>
                         create mode 100644 octofamily/baby_octocat.txt <br/>
                         create mode 100644 octofamily/momma_octocat.txt <br/>
                         create mode 100644 red_octocat.txt <br/>

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        } elseif ($numOfChallenge == 21) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        [clean_up 63540fe] Remove all the cats <br/>
                         5 files changed, 5 deletions(-) <br/>
                         delete mode 100644 blue_octocat.txt <br/>
                         delete mode 100644 octocat.txt <br/>
                         delete mode 100644 octofamily/baby_octocat.txt <br/>
                         delete mode 100644 octofamily/momma_octocat.txt <br/>
                         delete mode 100644 red_octocat.txt <br/>

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        }

        return $message;
    }

    /**************************************************
    *  log command.
    **************************************************/
    public function log($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 9) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        commit 3852b4db1634463d0bb4d267edb7b3f9cd02ace1 <br/>
                        Author: Try Git <try_git@github.com> <br/>
                        Date:   Sat Oct 10 08:30:00 2020 -0500 <br/>

                            <span style="margin-left: 25px;display:block;">
                            Add all the octocat txt files</span>

                        commit b652edfd888cd3d5e7fcb857d0dabc5a0fcb5e28 <br/>
                        Author: Try Git <try_git@github.com> <br/>
                        Date:   Sat Oct 10 08:30:00 2020 -0500 <br/>

                            <span style="margin-left: 25px;display:block;">
                            Added cute octocat story</span>

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        }

        return $message;
    }

    /**************************************************
    *  remote command.
    **************************************************/
    public function remote($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 10) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        }

        return $message;
    }
    
    /**************************************************
    *  push command.
    **************************************************/    
    public function push($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 11) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        Branch master set up to track remote branch master 
                        from origin. <br />
                        <span style="color:#0F0;margin: 20px;">Success!</span>
                    </p>
                </div>  
            ';
        } elseif ($numOfChallenge == 25) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        To https://github.com/try-git/try_git.git <br />
                           3e70b0f..accb4d7  master -> master <br />
                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        }

        return $message;
    }

    /**************************************************
    *  pull command.
    **************************************************/    
    public function pull($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 12) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        Updating 3852b4d..3e70b0f <br />
                        Fast-forward <br />
                         yellow_octocat.txt |    1 + <br />
                         1 file changed, 1 insertion(+) <br />
                         create mode 100644 yellow_octocat.txt <br />

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        }

        return $message;
    }

    /**************************************************
    *  diff command.
    **************************************************/
    public function diff($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 13) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        diff --git a/octocat.txt b/octocat.txt <br />
                        index 7d8d808..e725ef6 100644 <br />
                        --- a/octocat.txt <br />
                        +++ b/octocat.txt <br />
                        <span style="color: #12D0FF;">@@ -1 +1 @@</span> <br />
                        <span style="color: #F00;">-A Tale of Two Octocats
                        </span> <br />
                        <span style="color: #0F0;">+[mA Tale of Two Octocats 
                        and an Octodog</span> <br />

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        } elseif ($numOfChallenge == 15) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        diff --git a/octofamily/octodog.txt 
                        b/octofamily/octodog.txt <br />
                        new file mode 100644 <br />
                        index 0000000..cfbc74a <br />
                        --- /dev/null <br />
                        +++ b/octofamily/octodog.txt <br />
                        <span style="color: #12D0FF;">@@ -0,0 +1 @@</span>
                        <br />
                        <span style="color: #0F0;">+[mwoof</span> <br />

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        }

        return $message;
    }

    /**************************************************
    *  reset command.
    **************************************************/
    public function reset($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 16) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        } 

        return $message;
    }

    /**************************************************
    *  checkout command.
    **************************************************/
    public function checkout($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 17) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        } elseif ($numOfChallenge == 19) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        Switched to branch \'clean_up\' <br />

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        } elseif ($numOfChallenge == 22) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        Switched to branch \'master\' <br />

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        }   

        return $message;
    }

    /**************************************************
    *  branch command.
    **************************************************/
    public function branch($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 18) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        } elseif ($numOfChallenge == 24) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        Deleted branch clean_up (was ec6888b). <br />

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        }

        return $message;
    }

    /**************************************************
    *  rm command.
    **************************************************/
    public function rm($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 20) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        rm \'blue_octocat.txt\' <br />
                        rm \'octocat.txt\' <br />
                        rm \'octofamily/baby_octocat.txt\' <br />
                        rm \'octofamily/momma_octocat.txt\' <br />
                        rm \'red_octocat.txt\' <br />

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        } 

        return $message;
    }

    /**************************************************
    *  merge command.
    **************************************************/
    public function merge($numOfChallenge) {
        $message = NULL;
        if ($numOfChallenge == 23) {
            $message = '
                <div class="resultOfCommand">
                    <p>
                        Updating 3852b4d..ec6888b <br />
                        Fast-forward <br />
                         blue_octocat.txt             |    1 - <br />
                         octocat.txt                  |    1 - <br />
                         octofamily/baby_octocat.txt  |    1 - <br />
                         octofamily/momma_octocat.txt |    1 - <br />
                         red_octocat.txt              |    1 - <br />
                         5 files changed, 5 deletions(-) <br />
                         delete mode 100644 blue_octocat.txt <br />
                         delete mode 100644 octocat.txt <br />
                         delete mode 100644 octofamily/baby_octocat.txt <br />
                         delete mode 100644 octofamily/momma_octocat.txt <br />
                         delete mode 100644 red_octocat.txt <br />

                        <span class="success" >Success!</span>
                    </p>
                </div>  
            ';
        } 

        return $message;
    }

    function __destruct() {
        $this->gitCommands = NULL;
        $this->gitFlags = NULL;
    }

} // END class Git
