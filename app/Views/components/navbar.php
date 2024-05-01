<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <img class="d-inline-block align-text-top" width="24px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEnElEQVR4nO2ZbUxbVRiA34LCJhgnVuecJoYPk0UmCpUuS7Zl0A+Qz5mBDJHpFLbIfrhEN0DH/piQuIyCH1AnC58t9J67OaBlIjjurRs/pz8MMr9+bIkfMUP944Ydfc05pQ1rb9m6Xm77o2/yJqfvOef2ee65J809BYhFLGIRC+CmNgIvVAMRO4EXncALvwAvzAMvLAAvIvDCP0CEP4AXLwEvngZeeBdOT2+BYxgX2btHnMUeYAp5F0nE74EIlZGB52ZS7hrcP7mZFOUFiFMrn4CYGwmBGhkFXlZegBdaZBPghRblBYjQLZeAij9/SnH+RMvERbkE7u8fu6S4QHK//Xe5BB7oG7mmuECSxXFdLoHkfseC4gJrrBOLcgmsoddSOpL77e4nugaxnrTjB6QFB7lD6OT24WVShVe5F3GeK0EXZ2RJ27RG++gYOpbOqSftSK9Br6W4QFNFAdJETh9WNi1dJyYQSrjaoKi7TnNdrhXoqcv+12WCQlAqXG1w9b82FY42G26B6apNQ3NtWlBYqf6xZiO6TCp0meCKogI3TRAASOHMe9ODCgTrv2kChQVMUEglFofz3OE+QmjbuUjhXSegAJQO5HRzYQtw+lnFwX0CNv1n4a+Azhw5geF8nQwrkBcxASbB6c6HAS9EFJ4J8PmpyOn/DB1edw05QzpEQ+CwfjtyuvmQ4IlxG0RTXO4yZLkHNLeFdw/k4OH6orcg2kJrLOulP0iLnSno7tmEaN2KaMvzpHUrq9E+OkZrKP31Gb0+CaIlni8o3aU1ljG4O0k6NtdQchCiJFS5xtLZkAWMZT9CNMTGxtYKCvRc+R6XozP3tvB0THZ5lYvOeby5dVfkyOnJHBEuPHrMxO5o2sEmzBzqwQVTXFB42kfHpDccYXMeef8j+krpBDKtUQ58fDwRiPgpEMFN32cz9r/NYNStZvZ+e/JkUVAB2kfHeKWfPHTUe7C1CET8BLjvElYX3jKtBiKIy1/IN1e/wWCSzBz7vN52Fv/quC8A/u/2tbjBdsZzjNIxwOZs2tvgf0J3EUam1q8O/JnJh4AX5vxPFLLL9zCYe/vP+Wotp14LEKA1b//a7s/ZnKzKVwNPKYg4C5avH5QXHlEFRPhC6khEU7ybwcQNT/lqSWQCr3yo9sHTNq15+++xTLA5OSUvSR+1EMEurwA//UrAeabtK1QvbUaaD795hNW8/fv6DvsEaNtbT+i1Y8YBz77RFpRjxoF3MKHPISEiVMsDz3HxQISf/b9A3dCIT2VvwZz8FzAnr5C1ac3bH89P47cfp7KkbVazTuKzu2t90tqlzKqoxfihSf9H6Qd5/oIiznypZU7dbmDQttFzODTiYO3UbfpbxhgGj7P0fn7sveMMeHPV65jYa8fEnjHMrK5jtQ1HT0itws7wBXixQ1Jgh0dgeHQcrWftHoEdhhWPEDNr6hnsOlOvr7bO1MdqT9fsl9rQ7XIIzEjBeB+h5aluaFpRQFNcwWCXPy7xQ1+ymqa4UmozX5BD4DcpGM8mbmR3nSZtL9/EUvnN3E8s77QO9LvDDiLeWAkqlAxZgIg3wheIBaxq/A+K9mYNeb+CuQAAAABJRU5ErkJggg==">
            Apotek.id
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <ul class="d-flex navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-primary" aria-current="page" href="
                    <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) echo base_url('logout'); else echo base_url('login'); ?>">
                        <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) echo 'Logout';
                        else echo 'Login Dokter'; ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>