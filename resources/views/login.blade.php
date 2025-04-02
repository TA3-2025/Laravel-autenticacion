@include("componentes.header")
        <h1>Login</h1>
        
        <form action="/login" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>

        </form>

        @if (session('error'))
            <div style="color: red;">
                {{ session('error') }}
            </div>
        @endif

        @if (session('logout'))
            <div style="color: green;">
                Sesión Cerrada
            </div>
        @endif
@include("componentes.footer")
