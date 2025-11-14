<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->

    @foreach ($data As $item)
        <p>{{ $item->studname }} - 
            {{ $item->studemail }} - 
            {{ $item->studcity }}
             {{$item->studcontact}}</p>
     @endforeach
</div>
