
            <div class="w-50 m-auto" style="width: 50rem;">
           
                <h5 class="card-title text-center">Volunteer Work Type</h5>
                <form action="{{route('search')}}" method="get">
                    <label for="forWork">Select WorkType</label>
                    <select class="form-select" name="worktype" id="">
                        <option value="heavyA">HeavyA</option>
                        <option value="heavyB">HeavyB</option>
                        <option value="heavyC">HeavyC</option>
                        <option value="moderateA">ModerateA</option>
                        <option value="moderateB">ModerateB</option>
                        <option value="moderateC">ModerateC</option>
                        <option value="liteA">LiteA</option>
                        <option value="liteB">LiteB</option>
                        <option value="liteC">LiteC</option>
                    </select>
           
                    <label for="forWork">Area</label>
                    <select class="form-select" name="area" id="">
                       <option value="dhaka">Dhaka</option>
                       <option value="chittagong">Chittagong</option>
                       <option value="shylhet">Sylhet</option>
                    </select>
                    <div class="text-center m-2">

                        <button type="submit" class="btn btn-primary">Search Volunteer</button>
                    </div>
                </form>
             </div>
