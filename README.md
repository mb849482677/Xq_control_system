软件项目管理大作业-机器车管控系统

**进去backend**

- 更新laravel依赖包：composer install

- 配置laravel 环境：.env

- 生成key： php artisan key:generate

- 配置laravel-admin: 

- - php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"

- - php artisan admin:install

- 数据库：php artisan migrate

- 配置JWT：php artisan jwt:secret

- 启动：php artisan serve

  **进去frontend**

npm install 安装

npm run dev 运行

