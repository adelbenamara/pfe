@extends("layout_admin")
@section("title","list moderateurs")
@section("content")
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List moderateurs :</h6>
                        </div>
                        @if (count($moderateurs)!=0)


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th>nom utilisateur</th>
                                            <th>etat</th>


                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>nom utilisateur</th>
                                            <th>etat</th>


                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach ($moderateurs as  $v)


                                        <tr>

                                            <td>{{$v["nom_utilisateur"]}}</td>
@if ($v["etat"]=="1")
 <td>active</td>
 @else
 <td>desactive</td>
@endif

<td>
    <form action="{{route("moderateur.edit", $v->id)}}" method="GET">
        @csrf

            <input type="submit" value="Edit  " class="btn btn-outline-success">

        </form>
                                                <form action="{{route("moderateur.show", $v->id)}}" method="GET">
                                                    @csrf

                                                        <input type="submit" value="show  " class="btn btn-outline-info" >

                                                    </form>
</td><td>
    <form action="{{route("moderateur.destroy",$v->id)}}" method="post">
        @csrf
        @method("DELETE")
            <input type="submit" value="Delete" class=" btn btn-outline-danger">

        </form>

                                                        @if ($v["etat"]=="1")
                                                        <form action="{{route("moderateur.block",$v->id)}}" method="GET">
                                                            @csrf
                                                                <input type="submit" value="Block  " class="btn btn-outline-warning" >

                                                            </form>

                                                        @else
                                                        <form action="{{route("moderateur.deblock",$v->id)}}" method="GET">
                                                            @csrf
                                                                <input type="submit" value="Deblock"  class="btn btn-outline-dark">

                                                            </form>

                                                       @endif

</td>

                                        </tr>
                                        @endforeach




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                @else
  there is no moderateur add
                @endif


                    <!-- Content Row -->

@endsection
