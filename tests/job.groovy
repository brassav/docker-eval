job('job-v1') {
    scm {
        git('https://github.com/brassav/docker-eval', "v1") { node ->
            node / gitConfigName('valentin')
            node / gitConfigEmail('valentin.brassart@estiam.com')
        }
    }
    triggers {
        scm('* H/1 * * *')
    }
    wrappers {
        nodejs('NodeJS9')
    }
    steps {
        shell("npm install")
        shell("npm test")
    }
}