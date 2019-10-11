<table class="table table-striped">
    <thead>
      <tr>
        
        
      
        <th>Name</th>
        <th>Designation</th>
         <th>Weight</th>
        
        <th colspan="2"><center></center></th>
      </tr>
    </thead>
    <tbody>
      
    @foreach($members as $member)
      <tr>
        
        <td>{{$member['title']}}</td>
        <td>{{$member['description']}}</td>
         <td>{{$member['weight']}}</td>
       
        
        
        
        </td>
        
  <!-- Modal content -->
  
      </tr>
      @endforeach
  </table>