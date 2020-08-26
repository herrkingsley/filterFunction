
<form action="index.php">
  <label for="tags">Välj en tag:</label>
  <select id="tags" name="tags">
  <?php Render::renderTagList($allProducts->getAllTags()); ?>
    <!-- <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option> -->
  </select>
  <input type="submit" name="submit">
</form>