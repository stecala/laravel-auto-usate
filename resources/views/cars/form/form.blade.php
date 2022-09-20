<div class="mb-3">
   <label for="input-car-name" class="form-label">Car name</label>
   <input type="text" name="car_name" class="form-control" id="input-car-name" value="{{ request()->routeIs('cars.edit') ? $car->car_name : '' }}">
</div>
<div class="mb-3">
   <label for="input-car-model" class="form-label">Car model</label>
   <input type="text" name="car_model" class="form-control" id="input-car-model" value="{{ request()->routeIs('cars.edit') ? $car->car_model : '' }}">
</div>
<div class="mb-3">
   <label for="input-km" class="form-label">Km</label>
   <input type="text" name="car_km" class="form-control" id="input-km" value="{{ request()->routeIs('cars.edit') ? $car->car_km : '' }}">
</div>
<div class="mb-3">
   <label for="input-plate-number" class="form-label">Plate number</label>
   <input type="text" name="plate_number" class="form-control" id="input-plate-number" value="{{ request()->routeIs('cars.edit') ? $car->plate_number : '' }}">
</div>