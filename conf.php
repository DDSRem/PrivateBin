
;<?php http_response_code(403);
; config file for PrivateBin
;
; An explanation of each setting can be find online at https://github.com/PrivateBin/PrivateBin/wiki/Configuration.

[main]
; （可选）设置要在网站上显示的项目名称
; name = "PrivateBin"

; 完整的 URL，包含指向 PrivateBin 文件的域名和目录
; 此 URL 对于允许在社交网络上显示 Opengraph 图像至关重要
; basepath = ""

; 启用或禁用讨论功能，默认为 true
discussion = true

; 预选讨论功能，默认为 false
opendiscussion = false

; 启用或禁用密码功能，默认为 true
password = true

; 启用或禁用文件上传功能，默认为 false
fileupload = true

; 预选读后刻录功能，默认为 false
burnafterreadingselected = false

; 默认预选哪种显示模式，默认为“纯文本”
; 确保值存在于 [formatter_options]
defaultformatter = "plaintext"

; （可选）设置语法高亮主题，如 css/prettify/
; syntaxhighlightingtheme = "sons-of-obsidian"

; 每次粘贴或评论的大小限制（以字节为单位），默认为 10 兆字节
sizelimit = 10485760

; 要包含的模板，默认为“bootstrap”（tpl/bootstrap.php）
template = "bootstrap"

; （可选）要显示的信息文本
; 对 HTML 属性使用单引号，而不是双引号
;info = "More information on the <a href='https://privatebin.info/'>project page</a>."

; （可选）要显示的通知
; notice = "Note: This is a test service: Data may be deleted anytime. Kittens will die if you abuse this service."

; 默认情况下，PrivateBin 会根据浏览器猜测访问者的语言
; 设置。 您可以选择启用语言选择菜单，该菜单使用
; 在浏览器关闭之前存储选择的会话 cookie。
languageselection = false

; 设置您的安装默认语言，默认为英语
; 如果设置了此项并且禁用了语言选择，则这将是唯一的语言
; languagedefault = "en"

; （可选）创建新粘贴后提供的 URL 缩短地址
; 建议仅将其与自托管的缩短器一起使用，因为这会泄漏
; 粘贴加密密钥
; urlshortener = "https://shortener.example.com/api?link="

; （可选）让用户创建二维码，一键分享粘贴网址。
; 它在创建新粘贴时和查看粘贴时都有效。
; qrcode = true

; （可选）基于 IP 的图标是检测评论是否来自的弱机制
; 当评论中使用相同的用户名时，不同的用户。 有可能
; 如果服务器 salt 是，则用于获取非匿名评论发布者的 IP
; 泄漏并为所有（相关）IP 生成一个 SHA256 HMAC 彩虹表。
; 可以设置为以下值之一：“none”/“vizhash”/“identicon”（默认）。
; icon = "none"

;内容安全策略标头允许网站限制哪些来源
;允许在其上下文中访问。如果您添加了，则需要更改此设置
;从第三方域到您的模板的自定义脚本，例如追踪
;脚本或在某些 DDoS 保护服务之后运行您的站点。
;检查 https://content-security-policy.com/ 上的文档
;笔记：
; - 如果您使用引导主题，您可以从
;沙盒限制。
; - 默认情况下，这不允许从第三方服务器加载图像，例如什么时候
;它们嵌入糊状物中。如果您希望允许，您可以调整
;这里的政策。请参阅 https://github.com/PrivateBin/PrivateBin/wiki/FAQ#why-does-not-it-load-embedded-images
;详情。
; - 'unsafe-eval' 用于两种情况；检查浏览器是否支持
; async 函数，如果不是，则显示错误，并让 Chrome 启用
; webassembly 支持（用于 zlib 压缩）。如果 Chrome，您可以将其删除
;不需要支持，也不需要警告旧浏览器。
; cspheader = "default-src 'none'; base-uri 'self'; form-action 'none'; manifest-src 'self'; connect-src * blob:; script-src 'self' 'unsafe-eval'; style-src 'self'; font-src 'self'; frame-ancestors 'none'; img-src 'self' data: blob:; media-src blob:; object-src blob:; sandbox allow-same-origin allow-scripts allow-forms allow-popups allow-modals allow-downloads"

; 与 PrivateBin Alpha 0.19 保持兼容，安全性较低
; 如果启用，将使用 base64.js 版本 1.7 而不是 2.1.9 和 sha1 而不是
; 用于删除令牌的 HMAC 中的 sha256
; zerobincompatibility = false

; 当站点通过不安全的方式提供服务时启用或禁用警告消息
; 连接（不安全的 HTTP 而不是 HTTPS），默认为 true。
; Tor 和 I2P 域等安全传输方法会自动列入白名单。
; **强烈建议**禁用此功能。
; 有关更多信息，请参阅 https://github.com/PrivateBin/PrivateBin/wiki/FAQ#why-does-it-show-me-an-error-about-an-insecure-connection。
; httpwarning = true

; 选择压缩算法或禁用它。 仅适用于粘贴/评论
; 更改设置后创建。
; 可以设置为以下值之一：“none”/“zlib”（默认）。
; compression = "zlib"

[expire]
; 默认选择的过期值
; 确保该值存在于 [expire_options]
default = "1week"

[expire_options]
; 将这些中的每一个设置为过期期间的秒数，
; 或 0 如果它永远不会过期
5min = 300
10min = 600
1hour = 3600
1day = 86400
1week = 604800
; 嗯，这不是*确切*一个月，而是 30 天：
1month = 2592000
1year = 31536000
never = 0

[formatter_options]
; 设置可用的格式化程序、它们的顺序和它们的标签
plaintext = "Plain Text"
syntaxhighlighting = "Source Code"
markdown = "Markdown"

[traffic]
; 来自同一 IP 地址的呼叫之间的时间限制（以秒为单位）
; 将此设置为 0 以禁用速率限制。
limit = 10

; （可选）设置豁免的 IP 地址（v4 或 v6）或子网 (CIDR)
; 从速率限制。 无效的 IP 将被忽略。 如果有多个值
; 被豁免，列表需要用逗号分隔。 未设置以禁用
; exemptions.
; exempted = "1.2.3.4,10.10.10/24"

; （可选）如果您只需要一些源 IP 地址（v4 或 v6）或子网
; (CIDR) 允许创建粘贴，在此处设置这些。 无效的 IP 将是
; 忽略。 如果要豁免多个值，列表需要逗号
; 分开。 保持未设置以允许任何人创建粘贴。
; creators = "1.2.3.4,10.10.10/24"

; （可选）如果您的网站在反向代理或负载均衡器后面运行，
; 设置包含访问者 IP 地址的 HTTP 标头，即 X_FORWARDED_FOR
; header = "X_FORWARDED_FOR"

[purge]
; 两次清除过期焊膏之间的最短时间限制，仅
; 创建粘贴时触发
; 将此设置为 0 以在每次创建粘贴时运行清除。
limit = 300

; 一次清除中要删除的过期粘贴的最大数量
; 将此设置为 0 以禁用清除。 设置得更高，如果你正在运行一个大
; site
batchsize = 10

[model]
; 要加载的数据模型类的名称和存储目录
; 默认模型“文件系统”将所有内容存储在文件系统中
;class = 文件系统
;[model_options]
;dir = PATH "data"

;[model]
; example of a Google Cloud Storage configuration
;class = GoogleCloudStorage
;[model_options]
;bucket = "my-private-bin"
;prefix = "pastes"

;数据库连接
[model]
class = Database
[model_options]
dsn = "mysql:host=db;dbname=privatebin;charset=UTF8"
tbl = "privatebin_"
usr = "privatebin"
pwd = "abcde"
opt[12] = true

;[model]
; example of DB configuration for SQLite
;class = Database
;[model_options]
;dsn = "sqlite:" PATH "data/db.sq3"
;usr = null
;pwd = null
;opt[12] = true	; PDO::ATTR_PERSISTENT

;[model]
; example of DB configuration for PostgreSQL
;class = Database
;[model_options]
;dsn = "pgsql:host=localhost;dbname=privatebin"
;tbl = "privatebin_"     ; table prefix
;usr = "privatebin"
;pwd = "Z3r0P4ss"
;opt[12] = true    ; PDO::ATTR_PERSISTENT