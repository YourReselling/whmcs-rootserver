# Rootserver

Bestellung: `POST /products/rootserver/cluster/{cluster}/create`. ID: `data.server.id`.

Kundenfelder: `hostname`.

| Feld | Typ | Pflicht | Hinweis |
|---|---|---|---|
| `cluster` | string | Ja | Pfadparameter; administrative Zuordnung. |
| `cores` | integer | Ja | required; integer; min:1 |
| `disk` | integer | Ja | required; integer; min:10 |
| `hostname` | string | Ja | required; string |
| `ipv4_count` | integer | Ja | required; integer; min:0 |
| `ipv6_count` | integer | Ja | required; integer; min:0 |
| `os_version_id` | string | Ja | required; string; uuid; exists:rootserver_os_versions,id |
| `ram` | integer | Ja | required; integer; min:512 |
| `admin_password` | string | Nein | nullable; string; min:8 |
| `bandwidth_tier_id` | string | Nein | nullable; string; uuid; exists:rootserver_bandwidth_tiers,id |
| `notes` | string | Nein | nullable; string; max:1000 |
| `reseller_ipv4_addresses` | array | Nein | nullable; array; required_if:use_reseller_pool,true |
| `ssh_key_ids` | array | Nein | nullable; array |
| `startup_script_id` | string | Nein | nullable; string; uuid; exists:rootserver_startup_scripts,id |
| `use_reseller_pool` | boolean | Nein | nullable; boolean |

API-Key-Rechte für alle Modulansichten und Aktionen: `ddos_protection:read`, `rootservers:create`, `rootservers:delete`, `rootservers:power`, `rootservers:read`, `rootservers:update`.

Verwaltungsaktionen: Backup erstellen, Firewall anwenden, Firewall-Regel erstellen, Eigene ISO einlegen, ISO einlegen, ISO auswerfen, Reverse DNS ändern, Neu starten, Starten, Stoppen.

Hinweise:
- ram is MB; disk is GB; cluster is a path parameter
- No suspend/unsuspend endpoint; stop/start are power operations
