# Умная CPA форма

1. Скопировать файл `smart-cpa-form.php` в папку с прокладкой.
2. Указать настройки в файле `smart-cpa-form.php`
3. Файл прокладки должен иметь расширение .php !!!
4. В файле прокладки добавить код:
    
    4.1. В самом начале:
        
        <?php require_once __DIR__ . '/smart-cpa.form.php'; ?>
        
    4.2. В местах, где необходимо установить форму:
    
        <div style="text-align:center"><?php echo $formHtml; ?></div>
        
    4.3. Перед `</body>`
        
            <?php echo $formStyle; ?>
            <?php echo $formJs; ?>