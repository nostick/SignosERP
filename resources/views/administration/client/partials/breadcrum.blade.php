<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{route('admin')}}">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>

        <li>
            <a href="{{route('clients.index')}}">Clientes</a>
            <i class="fa fa-angle-right"></i>
        </li>
        @if(isset($line))
        <li>
            <span>{{$line}}</span>
        </li>
            @endif
    </ul>
</div>