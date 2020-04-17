@if(Session::has('info'))
    <div class="article info">
            <div class="article-body">
               <strong>{{ Session::get('info') }}</strong>
            </div>
    </div>
@endif
