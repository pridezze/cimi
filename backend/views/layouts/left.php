<aside class="main-sidebar">

    <section class="sidebar">
        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
/*                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],*/
/*                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],*/
                    [
                        'label' => '系统设置',
                        'icon' => 'cogs',
                        'url' => '#',
                        'items' => [
                            ['label' => '网站设置', 'icon' => 'cog', 'url' => ['/gii'],],
                            ['label' => '版本更新', 'icon' => 'cog', 'url' => ['/gii'],],
                            ['label' => '使用说明', 'icon' => 'cog', 'url' => ['/gii'],],
                            ['label' => '微信设置', 'icon' => 'cog', 'url' => ['/gii'],],
                            ['label' => '付费设置', 'icon' => 'cog', 'url' => ['/gii'],],
                            [
                                'label' => '短信设置',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => '短信配置', 'icon' => 'circle-o', 'url' => '#',],
                                    ['label' => '短息模板', 'icon' => 'circle-o', 'url' => '#',],
                                ],
                            ],
                            ['label' => '短信设置', 'icon' => 'cog', 'url' => ['/gii'],],
                            ['label' => '购买手册', 'icon' => 'cog', 'url' => ['/gii'],],
                            ['label' => '免责声明', 'icon' => 'cog', 'url' => ['/gii'],],
                        ],
                    ],
                    [
                        'label' => '行业管理',
                        'icon' => 'circle-o',
                        'url' => '#',
                        'items' => [
                            ['label' => '行业分类', 'icon' => 'circle-o', 'url' => '#',],
                            ['label' => '行业模板', 'icon' => 'circle-o', 'url' => '#',],
                        ],
                    ],
                    [
                        'label' => '会员管理',
                        'icon' => 'circle-o',
                        'url' => '#',
                        'items' => [
                            ['label' => '会员列表', 'icon' => 'circle-o', 'url' => '#',],
                            ['label' => '黑名单', 'icon' => 'circle-o', 'url' => '#',],
                        ],
                    ],
                    [
                        'label' => '门店管理',
                        'icon' => 'circle-o',
                        'url' => '#',
                        'items' => [
                            ['label' => '门店列表', 'icon' => 'circle-o', 'url' => '#',],
                            ['label' => '临期门店', 'icon' => 'circle-o', 'url' => '#',],
                            ['label' => '过期门店', 'icon' => 'circle-o', 'url' => '#',],
                            ['label' => '违禁门店', 'icon' => 'circle-o', 'url' => '#',],
                            [
                                'label' => '门店详情',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => '门店信息', 'icon' => 'circle-o', 'url' => '#',],
                                    ['label' => '服务列表', 'icon' => 'circle-o', 'url' => '#',],
                                    ['label' => '人员列表', 'icon' => 'circle-o', 'url' => '#',],
                                    ['label' => '会员列表', 'icon' => 'circle-o', 'url' => '#',],
                                    ['label' => '预约列表', 'icon' => 'circle-o', 'url' => '#',],
                                    ['label' => '评价列表', 'icon' => 'circle-o', 'url' => '#',],
                                    ['label' => '门店数据', 'icon' => 'circle-o', 'url' => '#',],
                                    ['label' => '续费记录', 'icon' => 'circle-o', 'url' => '#',],
                                ],
                            ],
                            ['label' => '消费日志', 'icon' => 'circle-o', 'url' => '#',],
                        ],
                    ],
                    [
                        'label' => '数据分析',
                        'icon' => 'circle-o',
                        'url' => '#',
                        'items' => [
                            ['label' => '分析1', 'icon' => 'circle-o', 'url' => '#',],
                            ['label' => '分析2', 'icon' => 'circle-o', 'url' => '#',],
                        ],
                    ],
                    [
                        'label' => '系统日志',
                        'icon' => 'list',
                        'url' => '#',
                        'items' => [
                            ['label' => '登录日志', 'icon' => 'circle-o', 'url' => '/logs/index',],
                            ['label' => '操作日志', 'icon' => 'circle-o', 'url' => '/logs/operation',],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>