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
}
