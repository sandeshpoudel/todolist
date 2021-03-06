    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
             <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 

                <span class="sr-only">Toogle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
             </button>
             <a href="/" class="navbar-brand">Todo List</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{Request::is('/')? 'active': '' }}">
                    <a href="/">Home</a>
                </li>
                <li class="{{Request::is('todo/create') ? 'active' : '' }}">
                    <a href="/todo/create">Create Todo</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>