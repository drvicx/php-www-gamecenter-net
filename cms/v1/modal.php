<!-- EDIT Modal: РЕДАКТИРОВАТЬ ИГРУ-->
<div class="modal fade" id="editModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись #<?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$value['id'] ?>" method="post">
			<!--Название-->
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_title" value="<?=$value['title'] ?>" placeholder="Название">
        	</div>
			<!--Дата выхода-->
        	<div class="form-group">
        		<input type="date" class="form-control" name="edit_release_date" value="<?=$value['release_date'] ?>" placeholder="Дата выхода">
        	</div>
			<!--Локальня ссылка на раздел с файлом-описанием-->
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_link_info" value="<?=$value['link_info'] ?>" placeholder="Локальная ссылка">
        	</div>
			<!--Глобавльня ссылка на магазин для покупки-->
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_link_shop" value="<?=$value['link_shop'] ?>" placeholder="Глобальная ссылка">
        	</div>
			<!--Рейтинг игры по ТОП 100-->
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_rating" value="<?=$value['rating'] ?>" placeholder="Рейтинг (топ 100)">
        	</div>
			<!--Кнопки формы-->
        	<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>

<!-- DELETE Modal: УДАЛИТЬ ИГРУ -->
<div class="modal fade" id="deleteModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись # <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="?id=<?=$value['id'] ?>" method="post">
        	<button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
    	</form>
      </div>
    </div>
  </div>
</div>
