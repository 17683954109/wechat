@extends('master')
@section('title','订单详情')
@section('content')
<div class="weui-cells__title">订单编号:{{$order_id}}</div>
    <div class="weui-cells weui-cells_checkbox" style="text-align: left;padding-bottom: 200px" id="mys">
        
        @foreach($image as $p=>$val)
                        <div class="weui-cells" style="z-index: 10;" onclick="location.href='/product/{{$proid[$p]}}'">
                            <a class="weui-cell weui-cell_access">
                                <div class="weui-cell__hd"><img src="{{$val}}" style="width:40px;margin-right:5px;display:block"></div>
                                <div class="weui-cell__bd">
                                    <p id="celltitle"></p>
                                    <span style="font-size: 12px;color: #666666" id="s">{{$title[$p]}}</span>
                                    <span style="font-size: 12px;color: #666666" id="nums">&nbsp;&nbsp;X{{$nums[$p]}}</span><br/>
                                    <span style="font-size: 12px;color: #666666" id="s">单价:￥{{$price[$p]}}</span>
                                    <span style="font-size: 12px;color: #666666" id="tot">&nbsp;&nbsp;总价:￥{{$price[$p]*$nums[$p]}}</span>
                                </div>
                            </a>
                        </div>
                        @endforeach

                        
                    </div>
                    @if($state=='no pay')
<div style="position: fixed;left: 0;width: 100%;bottom: 80px;z-index: 90;background: #FFFFFF">
    <p class="weui-cells__title">收件人:</p>
    <div class="weui-cell__bd">
        <p style="font-size: 12px;text-indent: 2em">{{$add->name}}</p>
    </div>
    <p class="weui-cells__title">联系电话:</p>
    <div class="weui-cell__bd">
        <p style="font-size: 12px;text-indent: 2em">{{$add->phone}}</p>
    </div>
    <p class="weui-cells__title">详细地址:</p>
    <div class="weui-cell__bd">
        <p style="font-size: 12px;text-indent: 2em">{{$add->address}}</p>
    </div>
<p class="weui-cells__title">支付方式</p>
    <div class="weui-cells weui-cells_radio">
        <label class="weui-cell weui-check__label" for="x11">
            <div class="weui-cell__bd">
                <p style="font-size: 12px">微信支付</p>
            </div>
            <div class="weui-cell__ft">
                <input type="radio" class="weui-check" name="radio1" id="x11" checked="checked">
                <span class="weui-icon-checked"></span>
            </div>
        </label>
        <label class="weui-cell weui-check__label" for="x12">

            <div class="weui-cell__bd">
                <p style="font-size: 12px">支付宝支付</p>
            </div>
            <div class="weui-cell__ft">
                <input type="radio" name="radio1" class="weui-check" id="x12">
                <span class="weui-icon-checked"></span>
            </div>
        </label>
    </div>
</div>
@endif


               <div style="width: 100%;height: 80px;position: fixed;left: 0;bottom: 0;background: #FFFFFF;z-index: 90">
        <p id="prcss" style="color: red;font-size: 14px;height: 10px;text-align: right;padding-right: 30px">总计:￥{{$total}}</p>
        <div class="weui-btn-area" style="display: flex">
            <a class="weui-btn weui-btn_primary" id="showTooltips" style="width: 48%;flex-grow: 1;margin: 0;padding: 0;background: #FFFFFF;border: none;border-radius: 0;color: black;" onclick="history.go(-1)">取消</a>
            @if($state=='no pay')<a class="weui-btn weui-btn_primary" id="prcs" style="width: 48%;flex-grow: 1;margin: 0;padding: 0;margin-left: 5%" onclick="topay()">支付@else<a class="weui-btn weui-btn_primary" id="prcs" style="width: 48%;flex-grow: 1;margin: 0;padding: 0;margin-left: 5%" onclick="history.go(-1)">确定@endif</a>
        </div>
    </div>
@endsection
@section('my-js')
@endsection