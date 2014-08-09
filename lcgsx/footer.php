<?php
/**
 * 底部模板文件（逸云科技）
 *
 * 显示页脚部分的内容，关闭 div#main 标签。
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Lcgsx
 * @since Lcgsx 1.0
 */
?>

        </div><!-- div#main -->

        <footer id="colophon" class="site-footer" role="contentinfo">

            <p>&copy;2014 <a href="/">乐从个体私营企业协会</a> 版权所有 | 广东省 佛山市 顺德区</p>
            <p>地址：佛山市顺德区乐从镇建设路一街 达丰创富大厦4楼 | 邮编：528315</p>

            <p>电话：0757-28786040 28788040 | 技术支持：<a href="http://www.easecloud.cn">逸云科技</a></p>

        </footer><!-- #colophon -->

    </div><!-- div#page -->

    <?php wp_footer(); ?>

    <!-- 代码begin -->
    <div class="fixedBox">
        <ul class="fixedBoxList">
            <li class="fixeBoxLi Service"><span class="fixeBoxSpan"></span> <strong>在线客服</strong>
                <div class="ServiceBox">
                    <div class="bjfff"></div>
                    <dl >
                        <dt>
                            <a title="点击这里给我发消息" href="tencent://message/?uin=584739469&Site=qq&Menu=yes">
                                <img src="<?=get_template_directory_uri()?>/images/qq.jpg">
                            </a>
                        </dt>
                        <dd> <strong>秘书处-玲</strong>
                            <p class="p1">9:00-17:00</p>
                            <p class="p2">
                                <a title="点击这里给我发消息" href="tencent://message/?uin=584739469&Site=qq&Menu=yes">点击交谈</a>
                            </p>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <a title="点击这里给我发消息" href="tencent://message/?uin=1473646001&Site=qq&Menu=yes">
                                <img src="<?=get_template_directory_uri()?>/images/qq.jpg">
                            </a>
                        </dt>
                        <dd> <strong>秘书处-群姐</strong>
                            <p class="p1">9:00-17:00</p>
                            <p class="p2"><a title="点击这里给我发消息" href="tencent://message/?uin=1473646001&Site=qq&Menu=yes">点击交谈</a></p>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <a title="点击这里给我发消息" href="http://jq.qq.com/?_wv=1027&k=NELzPN" target="_blank">
                                <img src="<?=get_template_directory_uri()?>/images/qq.jpg">
                            </a>
                        </dt>
                        <dd> <strong>协会 QQ 群</strong>
                            <p class="p1">9:00-17:00</p>
                            <p class="p2"><a title="点击这里给我发消息" href="http://jq.qq.com/?_wv=1027&k=NELzPN" target="_blank">点击交谈</a></p>
                        </dd>
                    </dl>
                </div>
            </li>
            <li class="fixeBoxLi Home"> <a href="<?php bloginfo('siteurl')?>"> <span class="fixeBoxSpan"></span> <strong>返回首页</strong> </A> </li>
            <li class="fixeBoxLi BackToTop" onclick="window.scrollTo(0, 0)"> </a><span class="fixeBoxSpan"></span> <strong>返回顶部</strong> </li>
        </ul>
    </div>
    <!-- 代码end -->

</body>
</html>