   public class oea_coinlist
    {
        public string symbol { get; set; }
        public double withdrawal_fee { get; set; }
        public double min_withdrawal { get; set; }
        public bool withdrawal_suspended { get; set; }
        public int deposit_fee { get; set; }
        public double min_deposit { get; set; }
        public bool deposit_suspended { get; set; }
    }