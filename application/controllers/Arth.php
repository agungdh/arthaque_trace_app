<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arth extends CI_Controller {

	public function aq()
	{
		header("Access-Control-Allow-Methods: GET");
		header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
		
		if ($this->input->get('arthaque')) {
			$this->db->insert('neng', [
				'ndi' => $this->input->get('arthaque')
			]);
		}
	}

	public function ue()
	{
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Dah ditarok mana aja sii</title>
		</head>
		<body>
			<h3>Dah ditarok mana aja sii</h3>

			<table width="100%" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Domain</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 0;
					foreach ($this->db->get('neng')->result() as $item) {
						$i++;
						?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $item->ndi; ?></td>
						</tr>
						<?php
					}
					?>
				</tbody>
				<tfoot>
					<tr>
						<th>Total</th>
						<th><?php echo $i; ?></th>
					</tr>
				</tfoot>
			</table>
		</body>
		</html>
		<?php
	}
}
