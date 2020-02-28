@extends('layouts.master')

@section('content')  

<div>
   <div class="col-sm-4">
      <button type="button" class="btn btn-info add-new">Tambah Data</button>
      <!-- Search form -->
      <input style="margin-top:-40px;margin-left:835px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search">   
   </div>

<br>

  <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
    <tr>
      <th class="th-sm">No
      </th>
      <th class="th-sm">Position
      </th>
      <th class="th-sm">Office
      </th>
      <th class="th-sm">Age
      </th>
      <th class="th-sm">Start date
      </th>
      <th class="th-sm">Aksi
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>
            <button title="Edit" href="" type="button" class="btn btn-danger">Edit</button>
            <button title="Hapus" href=""type="button" class="btn btn-warning">Hapus</button>
      </td>
               
    </tr>
    <tr>
      <td>2</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>
            <button title="Edit" href="" type="button" class="btn btn-danger">Edit</button>
            <button title="Hapus" href=""type="button" class="btn btn-warning">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>Junior Technical Author</td>
      <td>San Francisco</td>
      <td>66</td>
      <td>2009/01/12</td>
      <td>
            <button title="Edit" href="" type="button" class="btn btn-danger">Edit</button>
            <button title="Hapus" href=""type="button" class="btn btn-warning">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>4</td>
      <td>Senior Javascript Developer</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2012/03/29</td>
      <td>
            <button title="Edit" href="" type="button" class="btn btn-danger">Edit</button>
            <button title="Hapus" href=""type="button" class="btn btn-warning">Hapus</button>
      </td>
    </tr>
    <tr>
      <td>5</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>33</td>
      <td>2008/11/28</td>
      <td>
            <button title="Edit" href="" type="button" class="btn btn-danger">Edit</button>
            <button title="Hapus" href=""type="button" class="btn btn-warning">Hapus</button>
      </td>
    </tr>   
  </table>
</div>

@endsection