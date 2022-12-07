

            <table align="center" bgcolor="#007bff">

                <tr>
                    <th style="padding: 30px";>Food Name</th>
                    <th style="padding: 30px";>Price</th>
                    <th style="padding: 30px";>Quantity</th>
                    <th style="padding: 30px";>Action</th>
                </tr>
        
     
            
                
                @foreach($data as $data)

                <tr align="center" >
                    <td>
                    
                        {{$data->title}}
                    </td>
                    <td>
                       
                        {{$data->price}}
                    </td>
                    <td>
                       
                        {{$data->quantity}}
                    </td>

                    
                    
                </tr>

                 @endforeach


                

            @foreach($data2 as $data2)

                <tr  style="position: relative; top:-60px; right:-360px;">

                    <td><a href="{{url('/remove',$data2->id)}}" class="btn btn-danger">Remove</a></td>

                  
                </tr>


            @endforeach
                
            </table>




            <div align="center" style="padding:10px;">
                <button class="btn btn-primary" type="btn" id="order">Order Now</button>
                
            </div>


                  <div id="appear" align="center" style="padding: 10px; display: none;">

                        <div style="padding: 10px;">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name">   
                        </div>

                         <div style="padding: 10px;">
                            <label>Phone</label>
                            <input type="number" name="phone" placeholder="Phone Number">   
                        </div>

                         <div style="padding: 10px;">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Address">   
                        </div>

                         <div style="padding:10px; ">
                            <!-- <input class="btn btn-success" type="submit" value="Confrim Order"> -->
                            <button  style="background-color:007bff;" class="btn btn-primary">Order Confrim</button>
                            <button id="close" type="btn" class="btn btn-danger">Close</button>
                            
                        </div>

                    </div>
                   

