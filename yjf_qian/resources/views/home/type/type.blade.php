

@extends('home/layout/layout')
@section('content')

    <div class="js-responded-list narrow">

        <div class="mod-list">

            <div class="box">

                <div class="box-hd clearfix">

                    <h2 class="title">

                        全部分类                    </h2>

                    <div class="filter">

                        <dl>

                            <dd bussType="1" class="" ><a class="clickstat" href="http://www.yjf.com/type" eid="click/list/allgame/all"   eid_desc="点击/列表页/全部游戏/全部">全部</a></dd>


                            @foreach($type as $v)



                            <dd bussType="1" class="" ><a class="clickstat" href="http://www.yjf.com/fen/{{$v->t_id}}" eid="click/list/allgame/online"   eid_desc="点击/列表页/全部游戏/网游竞技">{{ $v->t_name }}</a></dd>

                            @endforeach


                        </dl>

                    </div>

                </div>

                <div class="box-bd">

                                        <ul class="game-list clearfix" id="js-game-list">

                                            @foreach($fen as $vv)
                                                                                                            <li class="game-list-item">

	    <a target="_blank" href="http://www.yjf.com/lists/{{$vv->t_id}}" class="pic new-clickstat" report='{"eid":"click/postion","position":"gameList/gameCard/1","game_id":"1"}'>

    	<img class="pic-img" data-original="{{$vv->img}}" src="images/default_game_pc.jpg" alt="{{$vv->t_name}}" title="{{$vv->t_name}}" onerror="this.onerror='';this.src='images/default_game_pc.jpg'">

    	<p class="title">{{$vv->t_name}}</p>

    </a>

</li>
                                            @endforeach

                                            </ul>

                                    </div>

            </div>

        </div>

    </div>



@stop