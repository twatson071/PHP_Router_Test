<?php




class PatientsController
{
  /**
   * Show the profile for the given user.
   *
   * @param  int  $id
   * @return View
   */
  public function index()
  {
    return <<<HTML
  <h1>Patients Index Called</h1>
HTML;
  }

  public function get()
  {
    return <<<HTML
  <h1>Patients Get Called</h1>
HTML;
  }
  public function create()
  {
    return <<<HTML
  <h1>Patients Create Called</h1>
HTML;
  }
  public function update()
  {
    return <<<HTML
  <h1>Patients Update Called</h1>
HTML;
  }
  public function delete()
  {
    return <<<HTML
  <h1>Patients Delete Called</h1>
HTML;
  }
}
