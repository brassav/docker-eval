job('job-v2') {
    scm {
        git('https://github.com/brassav/docker-eval', "v2") { node ->
            node / gitConfigName('valentin')
            node / gitConfigEmail('valentin.brassart@estiam.com')
        }
    }
    triggers {
        scm('H/60 * * * *')
    }
    steps {
        shell("rm -rf samplephpwebsite")
        shell("git clone https://github.com/Akasam/samplephpwebsite;cd samplephpwebsite;git checkout v2;cd ..")
        shell("phpunit tests/test.php")
    }
}