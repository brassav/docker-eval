job('job-v1') {
    scm {
        git('https://github.com/brassav/docker-eval', "v1") { node ->
            node / gitConfigName('valentin')
            node / gitConfigEmail('valentin.brassart@estiam.com')
        }
    }
    triggers {
        scm('H/60 * * * *')
    }
    steps {
        shell("git clone https://github.com/Akasam/samplephpwebsite;
cd samplephpwebsite;
git checkout v1;
cd ..
   ")
        shell("phpunit tests/test.php")
        
        shell("rm -rf samplephpwebsite")
    }
}