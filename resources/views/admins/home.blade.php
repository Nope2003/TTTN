@extends('layouts.HeaderFooter')
@extends('layouts.app')


@section('content')
<div class="container">
    <div>
        <a href="/admins/home" class="btn btn-dark mt-2">Welcome Admin</a>
    </div>
    

    <table class="table table-hover">
        <thead>
          <tr>
            <nav class="navbar navbar-expand-sm bg-dark">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/admins/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/product">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Chưa nghĩ ra</a>
                    </li>
                    <li>
                        <form action="{{ route('logout_admins') }}" method="POST" class="d-flex" role="search">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </nav>
            <th>Tổng sản phẩm đang bán</th>
            <th>Tổng sản phẩm đã bán</th>
            <th>Tổng tiền</th>
            <th>...</th>
          </tr>
        </thead>
        <tbody>
           
            <tr>
                <td>999999</td>
                <td>999999</td>
                <td>999999</td>
                <td>...</td>
            </tr>
            <tr>
                <td>999999</td>
                <td>999999</td>
                <td>999999</td>
                <td>...</td>
            </tr>
            <tr>
                <td>999999</td>
                <td>999999</td>
                <td>999999</td>
                <td>...</td>
            </tr>
            <tr>
                <td>999999</td>
                <td>999999</td>
                <td>999999</td>
                <td>...</td>
            </tr>
            <tr>
                <td>999999</td>
                <td>999999</td>
                <td>999999</td>
                <td>...</td>
            </tr>
            
        </tbody>
    </table>

</div>



@endsection
