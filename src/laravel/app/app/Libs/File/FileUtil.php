<?php
namespace App\Libs\File;
use \SplFileObject;

class FileUtil {
    public static function getTsvAsArray(string $path, bool $treatBlankAsNull = false) {
        $fileExists = file_exists($path);
        if (!$fileExists) {
            $message = "ファイルが存在しません";
            var_dump($message);
        }
        $result = [];
        $file = new SplFileObject($path, "r");
        // 先頭行
        $headFields = $file->fgetcsv("\t", '"');
        $file->next();

        // ファイルの終端まで読込
        while ($file->valid()) {
            $record = [];
            $tsvRow = $file->fgetcsv("\t", '"');
            // 空行でないか判定
            $isNotBlankRow = collect($tsvRow)->contains(true);
            if (!$isNotBlankRow) {
                // 空行の場合、処理を中断して次の行へ
                continue;
            }
            $tsvRowCount = count($tsvRow);

            try {
                // フィールド名一覧をループ
                foreach($headFields as $fieldColIndex => $fieldName) {
                    if($tsvRowCount <= $fieldColIndex){
                        continue;
                    }
                    // 値を取得
                    $colValue = $tsvRow[$fieldColIndex];
                    // treatBlankAsNullオプションがtrueの場合、空文字をnullへ変換
                    if ($treatBlankAsNull) {
                        if ($colValue === '') {
                            $colValue = null;
                        }
                    }
                    // 一時変数へ　フィールド名：値　の形式でセット
                    $record[$fieldName] = $colValue;
                }

            } catch(\Exception $exception) {
                echo '読み込みエラーが発生しました';
                var_dump($tsvRow);
            }
            // 戻り値用変数へセット
            $result[] = $record;
            // 次の行を読込
            $file->next();
        }
        return $result;
    }
}
