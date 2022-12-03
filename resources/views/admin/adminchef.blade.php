<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
     	@include("admin.admincss")
  </head>
  <body>
    
    <div class="container-scroller">

  	@include("admin.navbar")

  <form action="{{url('/uploadchef')}}" method="POST" enctype="multipart/form-data">

  	@csrf

        	<div>
        		<label>Name</label>
        		<input style="color: blue;" type="text" name="name" required="" placeholder="Enter name">
        	</div>

        	<div>
        		<label>Speciality</label>
        		<input style="color: blue;" type="text" name="speciality" required="" placeholder="Enter the speciality">
        	</div>

        	<div>
        		<input type="file" name="image" required="">
        	</div>

        	<div>
        		<input  type="submit" value="Save">
        	</div>


      </form>

      <div>
        <table bgcolor="black">
          <tr>
            <th style="padding:30px;"> Chef Name</th>
            <th style="padding:30px;">Speciality</th>
            <th style="padding:30px;">Image</th>
            <th style="padding:30px;">Action</th>
          
          </tr>

          @foreach($data as $data)

          <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
            <td><a href="">Update</a></td>
          </tr>

            @endforeach

        </table>



      </div>



  </div>

@include("admin.adminscript")


video nmb 14.
8minute 18 second

   
  </body>
</html>