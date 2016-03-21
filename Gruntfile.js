module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // configuration des tâches grunt
        concat: {
            dist: {
                src: ['javascript/*.js'],
                dest: 'js/production.js'
            }
        },
        
        uglify: {
            build: {
                src: 'js/production.js',
                dest: 'js/production.min.js'
            }
        },
        
        imagemin: {
            dynamic: {
                files: [{
                    expand:true,
                    cwd: 'images/',
                    //ATTENTION PAS D'ESPACES
                    src: '**/*.{png,jpg,jpeg,gif}',
                    dest: 'img/'
                }]
            }
        },
        
        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                
                files:{
                    'css/global.css': 'css/starter.scss',
                    'css-admin/admin.css': 'css-admin/css-admin.scss'
                }
            }
        },
        
        watch: {
            scripts: {
                files: ['javascript/*.js'],
                tasks: ['concat','uglify'],
                options: {
                    spawn: false,
                }
            },
            css: {
                files: ['css/*.scss','css-admin/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                }
            }
        }
        
    });

    //Load contrib
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
    // Les tâches sont enregistrées ici
    grunt.registerTask('default', ['concat','uglify','imagemin','sass','watch']);

};