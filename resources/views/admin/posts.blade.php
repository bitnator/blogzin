@extends('admin.layout')
@section('conteudo')
<h1>Lista de posts do blog</h1>
<a href="{{route('post.create') }}" class="btn btn-primary">Novo Post</a>
<div class="row">
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header card-header-primary">
                <h4 class="card-title mt-0"> Table on Plain Background</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Country
                                </th>
                                <th>
                                    City
                                </th>
                                <th>
                                    Salary
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Dakota Rice
                                </td>
                                <td>
                                    Niger
                                </td>
                                <td>
                                    Oud-Turnhout
                                </td>
                                <td>
                                    $36,738
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection