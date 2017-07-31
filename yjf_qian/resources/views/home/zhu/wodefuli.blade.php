@extends('home/layout/header')
@section('content')
<div class="admin-menu">
    <div class="content">
        <div class="nav-scroll-wrap">
            <div class="scroll-content">
                <div class="nav-section" style="padding-bottom:0">
                    <h3 class="header">&nbsp;个人中心</h3>
                     <ul class="icon-filter">
                        <li>
                            <a menu="home" href="/per">
                                <span class="icon icon-home"></span>
                                <span class="title">
                                    我的信息
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="subscribe" href="/sub">
                                <span class="icon icon-subscribe"></span>
                                <span class="title">
                                    订阅与历史
                                </span>
                            </a>
                        </li>
                        <li id="msg-li">
                            <a menu="msg" href="/msg">
                                <span class="icon icon-msg"></span>
                                <span class="title">
                                    我的消息
                                </span>
                            </a>
                        </li>
                        <li id="CDKey_change-li">
                            <a menu="cdkey" href="http://i.huya.com/index.php?m=CdKey">
                                <span class="icon icon-CDKey_change"></span>
                                <span class="title">
                                    CDKey兑换
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="auth" href="http://i.huya.com/index.php?m=ProfileAuth">
                                <span class="icon icon-auth"></span>
                                <span class="title">
                                    虎牙认证
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                                               
                                
                    <div class="to-be-anchor">
                        <p>想成为万人敬仰的主播？</p>
                        <a href="/go" target="_blank" class="btn btn-to-anchor">成为主播</a>
                    </div>
           
            </div>
        </div>
    </div>
</div>
        

    <div class="main-col">

        <div class="scroll-content">

            <div class="mod mod-setting">

                <div class="mod-hd">

                    <h3>我的财产</h3>

                </div>

                <div id="tab-click" class="mod-tab">

                  <div class="mod-tab-hd" style="border-bottom:1px solid #ccc;">

                      <ul class="mod-tab-trigger J_nav">

                          <li><a href="http://i.huya.com/index.php?m=MyAccount&do=myAccount">我的财产</a></li>

                          <li><a href="http://i.huya.com/index.php?m=Guess">我的竞猜</a></li>

                          <li><a href="http://i.huya.com/index.php?m=Maw">我的奖品</a></li>

                          <li class="selected"><a href="http://i.huya.com/index.php?m=MyGift&do=listMyGift">我的福利</a></li>

                      </ul>

                  </div>

                </div>

                <div class="mod-bd">

                <div class="mod-message">

                                    <span class="tit">当前暂无福利</span>

                    @stop