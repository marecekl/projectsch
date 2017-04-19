<?php include_once 'school_template/header.php'; ?>	
    <section class="news-box top-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><span>Prihláste sa</span></h2>
                    <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">E-mail</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Heslo</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="heslo">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Prihlásiť sa</button>
                    </div>
                  </form>
                </div>
                <div class="col-md-6">
                    <h2><span>Alebo požiadajte o vytvorenie účtu</span></h2>
                    <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">E-mail</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Meno a Priezvisko</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Meno a priezvisko">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Prihláška</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Prosím odosielajte len vyplnenú prihlášku.</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Som žiakom
                      </label>
                    </div>
                    <button type="submit" class="btn btn-default">Odoslať</button>
                  </form>
                </div>
            </div>
        </div>
    </section>

 <?php include_once'school_template/footer.php'; ?>