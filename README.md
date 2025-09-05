# Google Bot Remote Display

Bu proje, WordPress veya başka bir siteye gerek kalmadan, sadece **Google botlarını tespit edip uzaktaki bir dosyayı** göstermek için hazırlanmıştır.

## Özellikler
- Googlebot ve ilgili Google servislerini tespit eder.
- Bot geldiğinde **uzaktaki PHP dosyasını** (`amp.php`) çağırır ve gösterir.
- Normal kullanıcılar için basit bir mesaj gösterir.

## Kullanım
1. Depoyu GitHub’a yükleyin veya indirin.
2. `index.php` dosyasını sunucunuza koyun.
3. `$remoteUrl` değişkenini kendi uzaktaki dosyanızla değiştirin.
4. Tarayıcıdan ziyaret eden normal kullanıcılar basit bir mesaj görürken, Google botları uzaktaki dosya içeriğini görecektir.

## Gereksinimler
- PHP 7.4 veya üzeri
- İnternet erişimi olan bir sunucu
