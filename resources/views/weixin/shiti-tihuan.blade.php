            <ul class="todayList">
            <?php if($shiti !=''){ ?>
                  @foreach($shiti as $v)
                        <li class="only4"  style="padding:10px 0 0 0">
                              <h2>{{$v['c_name']}}&nbsp;&nbsp;&nbsp;   </h2>
                              <p class="onlyheight"></p>
                              <span class="icon"></span>
                              <div class="clr"></div>
                              <div class='answer' style="display:none"><span class="onlyheight">{{$v['c_answer']}}</span></div>
                         </li>
                   @endforeach
                   <?php }else{ ?>
                        <li class="only4"  style="padding:10px 0 0 0">
                              <h2>暂时无相关试题&nbsp;&nbsp;&nbsp;   </h2>
                              <p class="onlyheight"></p>
                              <span class="icon"></span>
                              <div class="clr"></div>
                              <div class='answer' style="display:none"><span class="onlyheight">我们的试题还在更新中，请耐心等待</span></div>
                         </li>
                         <?php } ?>
            
            </ul>