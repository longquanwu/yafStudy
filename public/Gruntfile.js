/**
 * Author: wlq314@qq.com
 * Date: 2017/4/21  14:22
 */

module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        clean: ["amd/*/**", "amd/*"],
        concat: {
            options: {
                separator: ''
            },
            dist: {
                src: ['./src/js/*.js'],
                dest: './amd/js/global.js'
            }
        },
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            build: {
                src: 'amd/js/global.js',
                dest: 'amd/js/index.js'
            }
        },
        jshint: {
            options: {
                asi: true,
                browser: true,
                scripturl: true,
                laxbreak: true
            },
            all: ['./amd/js/*.js']
        },
        //less插件配置
        less: {
            development: {
                options: {
                    paths: ['assets/css']
                },
                files: {
                    'amd/css/index.css': 'src/css/*.less'
                }
            }
        },
        //watch插件的配置信息(监控js,css)
        watch: {
            less: {    //用于监听less文件,当改变时自动编译成css文件
                files: ['./src/css/*.less'],
                tasks: ['less'],
                options: {
                    livereload: true
                }
            },
            js: {
                files: ['./src/js/*.js', './src/css/*.css'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('run', ['concat', 'uglify', 'less', 'watch']);
}
