pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                git 'https://github.com/Adil-R/adil_jenkins_repo.git'
                sh 'composer install --ignore-platform-req=ext-curl'
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
            }
        }
        stage('Test') {
            steps {
                sh './vendor/bin/phpunit'
            }
        }
    }
}