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
                            <a menu="home" href="http://www.live.com/per">
                                <span class="icon icon-home"></span>
                                <span class="title">
                                    我的信息
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="subscribe" href="http://www.live.com/sub">
                                <span class="icon icon-subscribe"></span>
                                <span class="title">
                                    订阅与历史
                                </span>
                            </a>
                        </li>
                        <li id="msg-li">
                            <a menu="msg" href="http://www.live.com/msg">
                                <span class="icon icon-msg"></span>
                                <span class="title">
                                    我的消息
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="noble" href="http://www.live.com/sub">
                                <span class="icon icon-noble"></span>
                                <span class="title">
                                    我的贵族1
                                </span>
                            </a>
                        </li>
                        <!-- <li>
                                <a menu="myRoom" href="http://i.huya.com/index.php?m=MyRoomAuditor">
                                    <span class="icon icon-room"></span>
                                    <span class="title">
                                        房间管理
                                    </span>
                                </a>
                            </li> -->
                        <li>
                            <a menu="myRoom" href="http://i.huya.com/index.php?m=MyRoomAuditor">
                                <span class="icon icon-room"></span>
                                <span class="title">
                                    我的头衔1
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="money" href="http://www.live.com/money">
                                <span class="icon icon-money"></span>
                                <span class="title">
                                    我的财产
                                </span>
                            </a>
                        </li>
                        <!-- <li>
                            <a menu="guess" href="http://i.huya.com/index.php?m=Guess">
                                <span class="icon icon-guess"></span>
                                <span class="title">
                                    我的竞猜
                                </span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a menu="texas" href="http://i.huya.com/index.php?m=Texas">
                                <span class="icon icon-teaxs"></span>
                                <span class="title">
                                    开心德州
                                </span>
                            </a>
                        </li> -->
                        <!--
                        <li>
                            <a menu="guard" href="http://i.huya.com/index.php?m=Guard&do=guardInfo">
                                <span class="icon icon-protect"></span>
                                <span class="title">
                                    主播守护
                                </span>
                            </a>
                        </li>
                      
                        <li>
                            <a menu="badge"  href="http://i.huya.com/index.php?m=Badge">
                                <span class="icon icon-badge"></span>
                                 <span class="title">
                                     我的徽章
                                 </span>
                            </a>
                        </li>
                        -->
                        <!--
                        <li>
                            <a menu="basesetting" href="http://i.huya.com/index.php?m=PopOptions&do=userOption">
                                <span class="icon icon-base"></span>
                                <span class="title">
                                    基础设置
                                </span>
                            </a>
                        </li>
                        -->
                        <!-- <li id="mygift-li">
                            <a menu="mygift" href="http://i.huya.com/index.php?m=MyGift&do=listMyGift">
                                <span class="icon icon-welfare"></span>
                                <span class="title">
                                    我的福利
                                </span>
                            </a>
                        </li> -->
                        <!-- <li id="maw-li">
                            <a menu="maw" href="http://i.huya.com/index.php?m=Maw">
                                <span class="icon icon-maw"></span>
                                <span class="title">
                                    中奖查询
                                </span>
                            </a>
                        </li> -->
                        <!-- <li id="interaction_game-li">
                            <a menu="interaction_game" href="http://i.huya.com/index.php?m=MonkeyTrick">
                                <span class="icon icon-interaction"></span>
                                <span class="title">
                                    互动游戏
                                </span>
                            </a>
                        </li> -->
                        <!-- <li id="mygift-li">
                            <a menu="userlevel" href="http://i.huya.com/index.php?m=UserLevel">
                                <span class="icon icon-power"></span>
                                <span class="title">
                                    等级特权
                                </span>
                            </a>
                        </li> -->
                        <li id="CDKey_change-li">
                            <a menu="cdkey" href="http://i.huya.com/index.php?m=CdKey">
                                <span class="icon icon-CDKey_change"></span>
                                <span class="title">
                                    CDKey兑换1
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="auth" href="http://i.huya.com/index.php?m=ProfileAuth">
                                <span class="icon icon-auth"></span>
                                <span class="title">
                                    虎牙认证1
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                                               
                                
                    <div class="to-be-anchor">
                        <p>想成为万人敬仰的主播？</p>
                        <a href="http://www.huya.com/e/zhubo" target="_blank" class="btn btn-to-anchor">成为主播</a>
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