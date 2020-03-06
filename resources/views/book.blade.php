<h5 class="alert alert-info">Proceed By Checking your Appointment Status</h5>
                        <form class="form">
                            {{csrf_field()}}
                            <label for="text">Application Token <span class="fas fa-key "></span> :</label>
                            <input type="text" class="form-control" maxlength="25" name="application_token" id="defaultconfig">
                            <br>
                            <input class = "form-control btn btn-info" type="submit" name = "submit_application" value="Check Status">
                        </form>